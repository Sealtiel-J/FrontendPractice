var Alert = new showAlert();

function showAlert(){
    this.render = function(){
        console.log('Render called');
        let popUpBox = document.getElementById('customPopupContent');
        
        // Show the overlay and the custom alert box
        popUpBox.style.display = 'block';
        document.getElementById('closeModal').innerHTML = '<button onclick="Alert.ok()" class="btn">Sí quiero!</button>';
    }

this.ok = function() {
    console.log('Ok button clicked');  // Debugging line
    document.getElementById('customPopupContent').style.display = 'none';
    document.getElementById('customPopupOverlay').style.display = 'none';
    window.location.href = "index.php";
}
}