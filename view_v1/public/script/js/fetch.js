fetch("https://reqres.in/api/users/")
.then((respone) => console.log(respone.json()))
.then((json) => console.log(json))
