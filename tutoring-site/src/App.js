
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
      <Header />
      {/* Display example math unit */}
      <MathUnit grade = "Grade 3" title = "Intro to Multiplication" />
      {/* components will continue to go here */}
    </div>
  );
}

export default App;
