/**
 * Created by Mogbeyi David on 28/10/2017.
 */
function showPassword(){
    var check = document.getElementById("password")
    if(check.type === "password"){
        check.type = "text"
    } else{
        check.type = "password";
    }
}
