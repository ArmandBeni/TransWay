// input form node
let name = document.querySelector('.nom')
let mail = document.querySelector('.mail')
let msg  = document.querySelector('.msg')
// some possible useless variable
let local_name = ["name", "mail", "msg"]
let input_node = [name, mail, msg]


// function who check if user have previously pre complete the contact forl
function load()
{
  let temp_data = new Array()
  for(let i=0; i<local_name.length; i++)
  {
    temp_data = localStorage.getItem(local_name[i])
    if(temp_data != null)
    {
      input_node[i].value = temp_data
    }
  }

}
window.onload = load()




// event listner who write the value of the user in the localStorage
name.addEventListener("change", function(event){
  localStorage.setItem('name', this.value )
  console.log("in storage")
})

mail.addEventListener("change", function(event){
  localStorage.setItem('mail', this.value )
  console.log("in storage")
})

msg.addEventListener("change", function(event){
  localStorage.setItem('msg', this.value )
  console.log("in storage")
})
