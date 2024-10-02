let nextStepBtns = document.querySelectorAll('button.next-step-btn')

function nextStep(step) {
      var activeContainer = document.querySelector('div.main-container.active-container')
      activeContainer.classList.remove('active-container')
      let mainContainers = document.getElementsByClassName('main-container')
      mainContainers[step].classList.add('active-container')
      saveAnswerResult = null
}

function reportError() {
      alert('Houve um erro ao tentar salvar sua resposta, clique em Ok para que o site seja recarregado porfavor!')
      location.reload()
}

function saveAnswer(answer=Boolean, step=Number) {
      let xhr = new XMLHttpRequest()
      xhr.open('POST', '/salvar-resposta')
      xhr.setRequestHeader('Content-Type', 'application/json')
      xhr.onreadystatechange = () => {
            if (xhr.readyState == xhr.DONE) {
                  if (xhr.status == 200) {
                        let response = JSON.parse(xhr.responseText)
                        if (response === true) {
                              nextStep(step)
                        } else {
                              reportError()
                        }
                  }
            }
      }

      xhr.send(JSON.stringify({answer: answer}))
}

nextStepBtns.forEach(btn => {
      btn.onclick = () => {
            var dataStep = parseInt(btn.getAttribute('data-step'))
            var dataStatus = btn.getAttribute('data-status')
            if (dataStep < 12) {
                  if (dataStatus == 'true') {
                        saveAnswer(true, dataStep)
                  } else if (dataStatus == 'false') {
                        saveAnswer(false, dataStep)
                  } else if (dataStatus == 'none') {
                        nextStep(dataStep)
                  }

                  if (dataStep === 11) { location.href = '/quiz-final' }
            }
      }
})
