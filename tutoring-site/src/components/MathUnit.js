
import React from "react";
import "./MathUnit.css";

/**
 * MathUnit component for a math unit in a specific grade
 * Will have props object containing the properties for the grade
 * props.grade for grade of unit
 * props.title for title of unit
 */ 

function MathUnit(props){
    return(
        // display info on the units
        <div className="math-unit">
            <h2> {props.grade}: {props.title}</h2>
            {/* Will add more content specific to the unit here */}
        </div>
    );
}

export default MathUnit