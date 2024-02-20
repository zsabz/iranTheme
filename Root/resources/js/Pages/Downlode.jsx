export default function Downlode({links}) {
    console.log(links);
    return(
        <>
           {links.map(
    function(link,index) {
        console.log(link[0]);
        return(
           <div>               
                  
             <a href={link[1]}>{link[0]}</a>
           </div>
            
        )}
)}

        </>
    )
}