let nextStepBtns = document.querySelectorAll('button.next-step-btn')
let optionsBtns = document.querySelectorAll('button.option.option-btn')
let mainNextStepBtns = []

nextStepBtns.forEach(btn => { mainNextStepBtns.push(btn) })
optionsBtns.forEach(btn => { mainNextStepBtns.push(btn) })

mainNextStepBtns.forEach(btn => {
      btn.onclick = () => {
            var dataStep = parseInt(btn.getAttribute('data-step'))
            if (dataStep < 18) {
                  var activeContainer = document.querySelector('div.main-container.active-container')
                  activeContainer.classList.remove('active-container')
                  let mainContainers = document.getElementsByClassName('main-container')
                  mainContainers[dataStep - 11].classList.add('active-container')
            }
      }
})

function setChart(x, y) {
      const ctx = document.getElementById('results-pie-chart')
      const data = {
            labels: [
                  'SIM',
                  'NÃO'
            ],
            datasets: [{
                  data: [x, y],
                  backgroundColor: [
                  'rgb(72, 184, 213)',
                  'rgb(47, 95, 152)'
                  ],
                  hoverOffset: 4
            }]
      }

      const config = {
            type: 'pie',
            data: data,
      }

      new Chart(ctx, config)
}

let xhr = new XMLHttpRequest()
let yesAnswers = 0
let notAnswers = 0
xhr.open('GET', '/respostas')
xhr.setRequestHeader('Content-Type', 'application/json')
xhr.onreadystatechange = () => {
      if (xhr.readyState == xhr.DONE) {
            if (xhr.status == 200) {
                  let answers = String(JSON.parse(xhr.responseText).answers)
                  const yesAnswersMatches = answers.match(/true/g)
                  const yesAnswersCount = yesAnswersMatches ? yesAnswersMatches.length : 0
                  const notAnswersMatches = answers.match(/false/g)
                  const notAnswersCount = notAnswersMatches ? notAnswersMatches.length : 0
                  setChart(yesAnswersCount, notAnswersCount)
            }
      }
}

xhr.send()
