const razor = ()=>{
    return window.alert("Soon ^_^")
}

const paytm = ()=>{
    return window.alert("Soon ^_^")
}

// qr code function

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