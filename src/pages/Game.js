import React, { useState } from "react";
import styles from "./Game.module.css";
import { useDispatch, useSelector } from "react-redux";
import {
  selectSpinsLeft,
  selectLog,
  selectBlind,
  decrementLeft,
  nextStage,
} from "../store/stageSlice";
import { addSpin, setLastPoints } from "../store/historySlice";

export default function Game() {
  const dispatch = useDispatch();
  const spinsLeft = useSelector(selectSpinsLeft);
  const log = useSelector(selectLog);
  const blind = useSelector(selectBlind);
  const [coinState, setCoinState] = useState("heads");
  const [probability, setProbability] = useState(
    Math.round(Math.random() * 100)
  );
  const [gain, setGain] = useState(Math.round(Math.random() * 100));
  const [loss, setLoss] = useState(Math.round(Math.random() * 100));
  const [points, setPoints] = useState(0);
  const [landText, setLandingText] = useState("");
  return (
    <div>
      <div className={styles.container}>
        <div className={styles.points}>{points}</div>
        <div className={styles.left}>
          <div className={styles.probability} hidden={blind}>
            {probability}%
          </div>
          <div className={styles.bgText}>Heads</div>
          <div className={styles.gain} hidden={blind}>
            +{gain}
          </div>
        </div>
        <div className={styles.middle}>
          <h3 className={styles.landingText}>{landText}</h3>
          <div
            className={styles.coin + " " + styles[coinState]}
            onClick={() => {
              setCoinState("");
              const newState =
                Math.round(Math.random() * 100) <= probability
                  ? "heads"
                  : "tails";
              setTimeout(() => {
                setCoinState(newState);
                if (log) {
                  dispatch(
                    addSpin({
                      result: newState,
                      probability: probability,
                      gain: gain,
                      loss: loss,
                    })
                  );
                }
              }, 100);
              setTimeout(() => {
                if (newState === "heads") setPoints(points + gain);
                else setPoints(points - loss);
                setProbability(Math.round(Math.random() * 100));
                setGain(Math.round(Math.random() * 100));
                setLoss(Math.round(Math.random() * 100));
                if (spinsLeft === 1) {
                  dispatch(setLastPoints(points));
                  dispatch(nextStage());
                }
                dispatch(decrementLeft());
                setLandingText(
                  newState === "heads" ? "Pala je glava" : "Palo je pismo"
                );
              }, 1000);
            }}
          >
            <div className={styles.tailsSide}>
              <img src="/tails.png" alt="tails" />
            </div>
            <div className={styles.headsSide}>
              <img src="/heads.png" alt="heads" />
            </div>
          </div>
          <div
            className={styles.skip}
            onClick={() => {
              setLandingText(
                Math.round(Math.random() * 100) <= probability
                  ? "Pala bi glava"
                  : "Palo bi pismo"
              );
              if (log) {
                dispatch(addSpin("skip"));
              }
              setProbability(Math.round(Math.random() * 100));
              setGain(Math.round(Math.random() * 100));
              setLoss(Math.round(Math.random() * 100));
              if (spinsLeft === 1) {
                dispatch(setLastPoints(points));
                dispatch(nextStage());
              }
              dispatch(decrementLeft());
            }}
          >
            Preskoči
          </div>
        </div>
        <div className={styles.right}>
          <div className={styles.probability} hidden={blind}>
            {100 - probability}%
          </div>
          <div className={styles.bgText}>Tails</div>
          <div className={styles.loss} hidden={blind}>
            -{loss}
          </div>
        </div>
      </div>
    </div>
  );
}
