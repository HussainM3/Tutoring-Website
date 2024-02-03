
import React from 'react';

// import components
import Header from './components/Header';
import MathUnit from './components/MathUnit';

function App() {
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
