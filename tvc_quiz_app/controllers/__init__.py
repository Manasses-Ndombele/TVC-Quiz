from flask import render_template, request, session, jsonify, redirect, url_for
from tvc_quiz_app import app

@app.route('/')
def home():
      if 'answers' in session:
            del session['answers']
            session.modified = True

      session['first_quiz'] = True
      session.modified = True
      return render_template('index.html')

@app.route('/salvar-resposta', methods=['POST'])
def save_answer():
      answer = request.get_json().get('answer')
      if 'answers' in session:
            session['answers'].append(answer)
            session.modified = True

      else:
            session['answers'] = [answer]
            session.modified = True

      return jsonify(True)

@app.route('/quiz-final')
def results():
      if 'first_quiz' in session:
            if session['first_quiz'] == True:
                  return render_template('results.html')

      return redirect(url_for('home'))

@app.route('/respostas', methods=['GET'])
def answers():
      if 'answers' in session:
            answers = session['answers']

            if len(answers) > 0:
                  return jsonify({'answers': answers})

            else:
                  return jsonify(None)

      else:
            return jsonify(None)
