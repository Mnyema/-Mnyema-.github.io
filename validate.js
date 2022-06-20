<!DOCTYPE html>
<html>
<script type="text/javascript">
    const form = document.getElementById("registrationForm")
    form.addEventListener('submit', (e) => {
        e.preventDefault()
        let email = document.getElementById('emailAddress')
        let password = document.getElementById('password')

        if (validateEmail(email.value) && validatePassword(password.value)) {
            form.submit()
        }
    })

    const validateEmail = (email) => {
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
            alert('Email is invalid')
            return false
        }
        return true
    }

    const validatePassword = (password) => {
        if (password.length < 8) {
            alert("Password must have a minimum of 8 characters")
            return false
        }
        if (!(/\w+/.test(password))) {
            alert('Password must contain at least 1 alphanumeric character')
            return false
        }
        if (!(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/.test(password))) {
            alert('Password must contain at least 1 special character')
            return false
        }

        return true
    }
</script>
</html>