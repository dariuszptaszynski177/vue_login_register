export function checkToken() {
    let token = window.localStorage.getItem("token");

    if(token=='')
    {
        window.length.href="/"
        console.log("lol")
    }
}