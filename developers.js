
//appear on mouse hover

//x --> card,y -->details,z-->container
function EnableDiv(x,y,z)
{

    if(window.innerWidth <= 500)
    {
        if (y.style.display === "none") 
        {
            x.style.backgroundColor = "white";
            x.classList.add("animation");
            y.style.display = "block";
            z.style.marginBottom = "50px";
        }
    }
    else
    {
        if (y.style.display === "none") 
        {
            
            x.style.backgroundColor = "white";
            y.style.display = "block";
            z.style.marginBottom = "75px";
            x.classList.add("animation");

        }

    }
}

//disappeer on mouseout
function DisableDiv(x,y,z)
{

    if(window.innerWidth <= 500)
    {
        if (y.style.display != "none") 
        {
            x.style.backgroundColor = "none";
            y.style.display = "none";
            // y.style.visibility = "hidden";

            z.style.marginBottom = "-100px"
            x.classList.remove("animation");
        }
    }
    else
    {
        if (y.style.display != "none") 
        {
            // x.style.backgroundColor = "aquamarine";
            y.style.display = "none";
            z.style.marginBottom = "-80px"
            // x.classList.remove("animation");
        }
    }
}
