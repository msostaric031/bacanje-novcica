import React from 'react';
import Landing from './pages/Landing'
import Game from './pages/Game'
import PlayerForm from './pages/PlayerForm'
import RateForm from './pages/RateForm'
import RateFormLast from './pages/RateFormLast'
import { useSelector } from 'react-redux';
import { selectStage } from './store/stageSlice'
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {
  const stage = useSelector(selectStage);
  return (
    <div className="App">
      {stage === 0 && <Landing></Landing>}
      {(stage === 1 || stage === 3 || stage === 5) && <Game></Game>}
      {stage === 2 && <PlayerForm></PlayerForm>}
      {stage === 4 && <RateForm></RateForm>}
      {stage === 6 && <RateFormLast></RateFormLast>}
    </div>
  );
}

export default App;
