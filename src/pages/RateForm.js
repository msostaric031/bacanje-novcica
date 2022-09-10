import React, { useState } from 'react';
import styles from './RateForm.module.css';
import { useDispatch, useSelector } from 'react-redux';
import Button from 'react-bootstrap/Button';
import {
  nextStage,
  setLeft,
  setBlind,
  setLog
} from '../store/stageSlice';
import { selectLastPoints } from '../store/historySlice';
import { addRatings } from '../store/playerInfoSlice';


export default function RateForm() {
  const dispatch = useDispatch();
  const [zadovoljstvo, setZadovoljstvo] = useState(null);
  const [opreznost, setOpreznost] = useState(null);
  const bodovi = useSelector(selectLastPoints);
  const handleClick = (e) => {
    e.preventDefault();
    e.stopPropagation();
    dispatch(addRatings({stage: 'pre-blind', zadovoljstvo: zadovoljstvo, opreznost: opreznost}));
    dispatch(setLeft(20)); 
    dispatch(setBlind(true)); 
    dispatch(setLog(true));
    dispatch(nextStage()); 
  }
  return (
    <div>
      <div className={styles.container}>
        <h1 className={styles.title}>Ostvarili ste {bodovi} bodova</h1>
          <h5>Na skali od -5 do 5, koliko ste zadovoljni ostvarenim bodovima?</h5>
          <h5>Pritom, -5 znači - "Jako nezadovoljan/nezadovoljna", 0 - "Niti zadovoljan/na niti nezadovoljan/na"; +5 - "Izrazito zadovoljan/na"</h5>
          <div className={styles.ratingBar}>
            {
              [...Array(11).keys()].map(el => {
                return (
                  <Button className={zadovoljstvo === el ? 'btn-secondary' : 'btn-info'} key={el} onClick={() => setZadovoljstvo(el)}>
                    {el-5}
                  </Button>
                )
              })
            }
          </div>
          <h5>Kako biste se kladili da možete ponovno igrat?</h5>
          <div className={styles.ratingBar}>
            {
              [...Array(6).keys()].map(el => {
                return (
                  <Button className={opreznost === el ? 'btn-secondary' : 'btn-info'} key={el} onClick={() => setOpreznost(el)}>
                    {el+1}
                  </Button>
                )
              })
            }
          </div>
          <ol>
            <li>Preskočio/la bih sve oklade. Ne bih prihvatio nijednu ponuđenu okladu.</li>
            <li>Puno opreznije bih se kladio/la</li>
            <li>Malo opreznije bih se kladio/la</li>
            <li>Igrao/la bi jednako</li>
            <li>Malo više bih riskirao/la s okladama</li>
            <li>Puno više bih riskirao/la s okladama</li>
            <li>Kladio/la bih se na sve ponude</li>
          </ol>
          <h3 className="mt-5">U sljedećem nizu bacanja pravila klađenja i prikupljanja bodova su ista, ali nećete imati podatak o vjerojatnosti i vrijednosti dobitka i gubitka.</h3>
          <Button variant="primary" className="mt-5" name="button" size="lg" disabled={zadovoljstvo === null || opreznost === null} onClick={handleClick}>
            Pokreni novi krug
          </Button>
      </div>
    </div>
  )
}