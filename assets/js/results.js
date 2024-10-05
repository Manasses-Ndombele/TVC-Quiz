let nextStepBtns = document.querySelectorAll('button.next-step-btn')
let optionsBtns = document.querySelectorAll('button.option.option-btn')
let mainNextStepBtns = []
let titleResult = document.querySelector('h2#title-result')
let descriptionResult = document.querySelectorAll('p.description-result')

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

let yesAnswers = 0
let notAnswers = 0
let answers = document.querySelector('meta[name="answers"]').getAttribute('content')
console.log(answers)
const yesAnswersMatches = answers.match(/true/g)
const yesAnswersCount = yesAnswersMatches ? yesAnswersMatches.length : 0
const notAnswersMatches = answers.match(/false/g)
const notAnswersCount = notAnswersMatches ? notAnswersMatches.length : 0
if (yesAnswersCount >= 3) {
      titleResult.innerHTML = '<strong>VOCÊ</strong> ESTÁ <strong>VICIADO NA PORNOGRAFIA</strong>'
      descriptionResult[0].textContent = 'Você respondeu SIM a 3 ou mais questões.'
      descriptionResult[1].textContent = 'Isso significa, segundo os critérios da OMS você se enquadra na definição médica de dependência (vício) em pornografia e pode ser considerado viciado.'
} else {
      titleResult.innerHTML = '<strong>VOCÊ NÃO</strong> ESTÁ <strong>VICIADO NA PORNOGRAFIA</strong>'
      descriptionResult[0].textContent = 'Você respondeu NÃO para a maioria das questões.'
      descriptionResult[1].textContent = 'São necessárias pelo menos 03 questões SIM para o diagnóstico de vício. Você não se enquadra na definição médica de dependência (vício) em pornografia.'
}

setChart(yesAnswersCount, notAnswersCount)
