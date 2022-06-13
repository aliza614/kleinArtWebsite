filterSelection("all")
//the above sets everthing to show
function filterSelection(color){
    var elements, i;
    elements=document.getElementsByClassName("filterDiv")
    if(color==="all") color="";
    for(i=0;i<elements.length;i++){
        removeClass(elements[i],"show")
        if(elements[i].className.indexOf(color)>-1) 
            addClass(elements[i],show);
    }

}

function addClass(element, name){
    var i, arr1, arr2;
    arr1=element.className.split(" ");
    arr2=name.split(" ");
    for(i=0;i<arr2.length;i++){
        if(arr1.indexOf(arr2[i])>-1)
            element.className+=" "+arr2[i];
    }
}

function removeClass(element, name){
    var i, arr1, arr2;
    arr1=element.className.split(" ");
    arr2=name.className.split(" ");
    for(i=0;i<arr2.length;i++)
    {
        while(arr1.indexOf(arr2[i])>-1)
            arr1.splice(arr1.indexOf(arr2[i]),1);
    }
    element.className=arr1.join(" ");
}

//add active class to the current control button to highlight it
var btnContainer=document.getElementById("myBtnContainer");
var btns=btnContainer.getElementsByClassName("btn");
for (var i =0;i<btns.length;i++){
    btns[i].addEventListener("click", function(){
        var current =document.getElementsByClassName("active");
        current[0].className=current[0].className.replace("active", "");
        this.className+=" active";
    });
}

// based on https://www.w3schools.com/howto/howto_js_filter_elements.asp