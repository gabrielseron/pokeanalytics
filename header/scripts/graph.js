const ctxMoves = document.querySelector('.movesChart');
const movesChart = new Chart(ctxMoves, {
    type: 'horizontalBar',
    data: {
        labels: ['attaque1', 'attaque2', 'attaque3', 'attaque4'],
        datasets: [{
            fillState: 'white',
            label: '# title',
            data: [120, 80, 60, 40],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 20,
                bottom: 0
            }
        },
        legend: {
            display: false,
        }
    }
});

const ctxStats = document.querySelector('.statsChart').getContext('2d');
const statsChart = new Chart(ctxStats, {
    type: 'radar',
    data: {
        labels: ['HP', 'Attack', 'Defense', 'Speed', 'Sp. Def', 'Sp. Att', 'tu peux en rajouter autant que tu veux'],
        datasets: [{
            label: '# title',
            data: [85, 50, 95, 120, 115, 120],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            color: 'rgba(255, 255, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 10,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        legend: {
            display: false,
        }
    }
});

const ctxEv = document.querySelector('.evChart').getContext('2d');
const evChart = new Chart(ctxEv, {
    type: 'radar',
    data: {
        labels: ['HP', 'Attack', 'Defense', 'Speed', 'Sp. Def', 'Sp. Att', 'tu peux en rajouter autant que tu veux'],
        datasets: [{
            label: '# title',
            data: [85, 50, 95, 120, 115, 120],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            color: 'rgba(255, 255, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 10,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        legend: {
            display: false,
        }
    }
});