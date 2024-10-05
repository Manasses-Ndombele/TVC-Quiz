let nextStepBtns = document.querySelectorAll('button.next-step-btn')
let answers = []

function nextStep(step) {
      console.log('Passei por aqui mas não deu')
      var activeContainer = document.querySelector('div.main-container.active-container')
      activeContainer.classList.remove('active-container')
      let mainContainers = document.getElementsByClassName('main-container')
      mainContainers[step].classList.add('active-container')
}

nextStepBtns.forEach(btn => {
      btn.onclick = () => {
            var dataStep = parseInt(btn.getAttribute('data-step'))
            var dataStatus = btn.getAttribute('data-status')
            if (dataStep <= 10) {
                  if (dataStatus == 'none') {
                        nextStep(dataStep)
                  } else {
                        answers.push(dataStatus)
                        console.log(answers)
                        nextStep(dataStep)
                  }
            } else if (dataStep === 11) {
                  answers.push(dataStatus)
                  console.log(answers)
                  location.href = `results.php?answers=${String(answers)}`
            }
      }
})
