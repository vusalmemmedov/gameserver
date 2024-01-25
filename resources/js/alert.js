function login() {
    var form = document.getElementById('loginForm');
    var formData = new FormData(form);


    var name = formData.get('name');
    var password = formData.get('password');

    
    if (name === 'correctName' && password === 'correctPassword') {
        
        Toast.fire({
            icon: "success",
            title: "Signed in successfully"
        });

        
        setTimeout(function() {
            window.location.href = '/dashboard';
        }, 3000);
    } else {

        var errorMessage = 'Invalid name or password';

        Toast.fire({
            icon: "error",
            title: errorMessage
        });
    }
}
