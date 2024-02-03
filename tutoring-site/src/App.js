
import React from 'react';

// import components
import Header from './components/Header';
import MathUnit from './components/MathUnit';

function App() {
  // sample array of math units
  const mathUnits = [
    {grade: "Grade 3", title: "Introduction to Multiplication"},
    {grade: "Grade 3", title: "1-digit Multiplication"},
    {grade: "Grade 4", title: "Place Value"},
  ]

  return (
    <div>
      <TitleBar />
      <div className='content-container'>
        <Sidebar />
        <div className='main-content'>
          <Header />
          {/* Display math units in array, map funciton iterates over the array, rendering a math unit component for each unit*/}
          {/* So it takes the mathUnits array, maps each unit to create a MathUnit component with the props for the current unit */}
          {mathUnits.map((unit, index) => 
            (<MathUnit key = {index} grade = {unit.grade} title = {unit.title} /> ))} 
          {/* components will continue to go here */}
        </div>
      </div>
    </div>
  );
};

export default App;
