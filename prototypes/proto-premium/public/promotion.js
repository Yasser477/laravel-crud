let search = document.querySelector("#search");
let para = document.querySelector("#para");

search.addEventListener("keyup", () => {
        fetch("search/" + search.value, {
            method: "GET"
        }).then((res) => {
            return res.json();
        })
        .then((data) => {
            console.log(data);
            para.innerHTML ='';

            for(var i = 0; i < data.length; i++){
            para.innerHTML +=`<tr>
            <p>${data[i]['name']}</p>


        </tr>
        `;
            }
        })
        ;
}); 
    





