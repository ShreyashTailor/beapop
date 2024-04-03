const razor = () => {
    openGPayQRCode();
}

const paytm = () => {
    openGPayQRCode();
}

// QR code function
document.addEventListener('DOMContentLoaded', function() {
    let gpayButton = document.getElementById('gpay-pay-button');
    
    gpayButton.addEventListener('click', function() {
        openQRCodeImage();
    });
});

function openQRCodeImage() {
    let qrCodeImagePath = 'qrcode.png'; 
    
    window.open(qrCodeImagePath, '_blank');
}

function openGPayQRCode() {
    let qrCodeImagePath = 'qrcode.png'; 
    
    window.open(qrCodeImagePath, '_blank');
}
