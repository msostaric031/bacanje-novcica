import React from 'react';
import styles from './Landing.module.css';
import { useDispatch } from 'react-redux';
import {
  nextStage,
  setLeft,
  setBlind,
  setLog
} from '../store/stageSlice';


export default function Landing() {
  const dispatch = useDispatch();
  return (
    <div>
      <div className={styles.container}>
        <h1 className={styles.title}>Upute za igranje</h1>
        <p className={styles.upute}>Cilj je skupiti što više bodova. U svakoj partij možete baciti ili preskočiti bacanje. Ukoliko preskočite bacanje, prikupljeni bodovi se neće mijenjati. No, ako se odlučite na bacanje novčića, moguće ostvariti, ali i izgubiti određeni iznos bodova. Pravilo igre je da se uvijek kladite na glavu.
        U prvom dijelu igre će Vam u svakom bacanju biti ponuđeni uvjeti oklade, te koja je vjerojatnost dobitka li gubitka. No, u drugom krugu te informacije nećete imati.
        </p>
        <p>
          Na donjoj slici je primjer igre te naznake na svim komponentama. Proučite ju prije pokretanja probne igre.
        </p>
        <img src="./tutorial_example.png" alt="tutorial_example" className={styles.imageExample}></img>
        <button className={styles.startTutorial} onClick={() => {
          dispatch(setLeft(3)); 
          dispatch(setBlind(false)); 
          dispatch(setLog(false));
          dispatch(nextStage()); 
        }}>
            Probna igra
          </button>
      </div>
    </div>
  )
}