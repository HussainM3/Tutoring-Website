
import React from "react";

/**
 * MathUnit component for a math unit in a specific grade
 * Will have props object containing the properties for the grade
 * props.grade for grade of unit
 * props.title for title of unit
 */ 

function MathUnit(props){
    return(
        // display info on the units
        <div>
            <h2>{props.grade} Grade: {props.title}</h2>
            {/* Will add more content specific to the unit here */}
        </div>
    );
}

export default MathUnit