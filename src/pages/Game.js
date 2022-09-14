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

const spinConstants = {
  probabilities: [1, 10, 20, 30, 40, 50, 60, 70, 80, 90, 99],
  values: [1, 10, 20, 30, 40, 50, 60, 70, 80, 90, 99],
};

export default function Game() {
  const dispatch = useDispatch();
  const spinsLeft = useSelector(selectSpinsLeft);
  const log = useSelector(selectLog);
  const blind = useSelector(selectBlind);
  const [lastSpinTime, setLastSpinTime] = useState(Date.now());
  const [coinState, setCoinState] = useState("heads");
  const [probability, setProbability] = useState(40);
  const [gain, setGain] = useState(60);
  const [loss, setLoss] = useState(40);
  const [points, setPoints] = useState(0);
  const [landText, setLandingText] = useState(" ");
  return (
    <div>
      <div className={styles.container}>
        <div className={styles.left}>
          <div className={styles.probability} hidden={blind}>
            {probability}%
          </div>
          <div className={styles.bgText}>Glava</div>
          <div className={styles.gain} hidden={blind}>
            +{gain}
          </div>
        </div>
        <div className={styles.middle}>

        <h3 className={styles.landingText}>{landText}</h3>
          
        <div className={styles.points}>{points}</div>
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
                      blind: blind,
                      gain: gain,
                      loss: loss,
                      timeElapsed: Date.now() - lastSpinTime,
                    })
                  );
                }
                setLastSpinTime(Date.now());
              }, 100);
              setTimeout(() => {
                if (newState === "heads") setPoints(points + gain);
                else setPoints(points - loss);
                setProbability(
                  spinConstants.probabilities[
                    Math.round(
                      Math.random() * (spinConstants.probabilities.length - 1)
                    )
                  ]
                );
                setGain(
                  spinConstants.values[
                    Math.round(
                      Math.random() * (spinConstants.values.length - 1)
                    )
                  ]
                );
                setLoss(
                  spinConstants.values[
                    Math.round(
                      Math.random() * (spinConstants.values.length - 1)
                    )
                  ]
                );
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
            className={styles.btn}
            onClick={() => {
              setLandingText(
                Math.round(Math.random() * 100) <= probability
                  ? "Pala bi glava"
                  : "Palo bi pismo"
              );
              if (log) {
                dispatch(
                  addSpin({
                    result: "skip",
                    blind: blind,
                    timeElapsed: Date.now() - lastSpinTime,
                  })
                );
              }
              setLastSpinTime(Date.now());
              setProbability(
                spinConstants.probabilities[
                  Math.round(
                    Math.random() * (spinConstants.probabilities.length - 1)
                  )
                ]
              );
              setGain(
                spinConstants.values[
                  Math.round(Math.random() * (spinConstants.values.length - 1))
                ]
              );
              setLoss(
                spinConstants.values[
                  Math.round(Math.random() * (spinConstants.values.length - 1))
                ]
              );
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
          <div className={styles.bgText}>Pismo</div>
          <div className={styles.loss} hidden={blind}>
            -{loss}
          </div>
        </div>
      </div>
    </div>
  );
}
