const ctx = document.getElementById('monthlyChart').getContext('2d');
const monthlyChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Monthly Data',
            data: [12, 19, 3, 5, 2, 3, 9, 6, 7, 8, 13, 10],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'rgba(0, 0, 0, 0.8)'
                }
            },
            tooltip: {
                backgroundColor: 'rgba(0, 0, 0, 0.7)',
                titleColor: 'rgba(255, 255, 255, 0.9)',
                bodyColor: 'rgba(255, 255, 255, 0.8)',
                footerColor: 'rgba(255, 255, 255, 0.7)'
            }
        }
    }
});
