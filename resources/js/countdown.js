const MINUTES = 60
const HOURS = 60 * MINUTES
const DAYS = 24 * HOURS
const MONTHS = 30 * DAYS

const elements = {
    months: document.getElementById('month'),
    days: document.getElementById('days'),
    hours: document.getElementById('hours'),
    minutes: document.getElementById('minutes'),
    seconds: document.getElementById('seconds')
}

let previousDiff = {}
const countdown = document.querySelector('#countdown')
const launchDate = Date.parse(countdown.dataset.time) / 1000

function refreshCountdown() {
    const difference = launchDate - Date.now() / 1000
    if (difference <= 0) {
        document.location.reload()
        return
    }
    const diff = {
        months: Math.floor(difference / MONTHS),
        days: Math.floor(difference % MONTHS/ DAYS),
        hours: Math.floor(difference % DAYS / HOURS),
        minutes: Math.floor(difference % HOURS / MINUTES),
        seconds: Math.floor(difference % MINUTES)
    }
    updateDom(diff)
    window.setTimeout(() => {
        window.requestAnimationFrame(refreshCountdown)
    }, 1000)
}

/**
 * Met à jour la structure HTML en fonction d'un nouvel interval
 * @param {{days: number, hours: number, minutes: number, seconds: number}} diff
 */
function updateDom(diff) {
    Object.keys(diff).forEach((key) => {
        if (previousDiff[key] !== diff[key]) {
            elements[key].innerText = diff[key]
        }
    })
    previousDiff = diff
}

refreshCountdown()
// On crée un objet qui contient les heures, minutes, secondes
// On va envoyer cet objet à une fonction qui mettra à jour l'HTML
