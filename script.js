let registration = document.querySelector('#send'); 

registration.onclick = function register() {
    var hrx = new XMLHttpRequest();

    header('Content-Type: application/json');

    hrx.open('POST', 'http://localhost/api.lemon/users');

    var formData = {
        login: document.querySelector('input[name="reg-login"]').value,
        password: document.querySelector('input[name="reg-password"]').value,
    }
    let body = JSON.stringify(formData);
    //alert(body);
    hrx.send(body);
    hrx.onreadystatechange = function () {
        
            
            location.reload();

        
    }

}