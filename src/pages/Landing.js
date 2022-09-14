import React, { useState } from "react";
import styles from "./Landing.module.css";
import { useDispatch } from "react-redux";
import { nextStage, setLeft, setBlind, setLog } from "../store/stageSlice";
import Form from "react-bootstrap/Form";

export default function Landing() {
  const dispatch = useDispatch();
  const [isRightAnswer, setRightAnswer] = useState(false);
  return (
    <div>
      <div className={styles.container}>
        <h1 className={styles.title}>Upute za igranje</h1>
        <p className={styles.upute}>
          Cilj je skupiti što više bodova. U svakoj partij možete baciti ili
          preskočiti bacanje. Ukoliko preskočite bacanje, prikupljeni bodovi se
          neće mijenjati. No, ako se odlučite na bacanje novčića, moguće
          ostvariti, ali i izgubiti određeni iznos bodova. Pravilo igre je da se
          uvijek kladite na glavu. U prvom dijelu igre će Vam u svakom bacanju
          biti ponuđeni uvjeti oklade, te koja je vjerojatnost dobitka li
          gubitka. No, u drugom krugu te informacije nećete imati.
        </p>

        <p>
          Na donjoj slici je primjer igre te naznake na svim komponentama.
          Proučite ju prije pokretanja probne igre.
        </p>
        <img
          src="./tutorial_example.png"
          alt="tutorial_example"
          className={styles.imageExample}
        ></img>
        <Form
          onChange={(e) => setRightAnswer(e.target.dataset.value === "true")}
        >
          <div key={`default-radio`} className="mb-5">
            <Form.Check
              label="Imam 38% vjerojatnosti da osvojim 7 bodova i 62% da izgubim 34 boda"
              data-value="false"
              name="group1"
              type="radio"
              defaultChecked={true}
            />
            <Form.Check
              label="Imam 62% vjerojatnosti da osvojim 7 bodova i 62% vjerojatnosti da izgubim 7 bodova"
              name="group1"
              data-value="false"
              type="radio"
            />
            <Form.Check
              label="Imam 38% vjerojatnosti da osvojim 34 boda i 62% vjerojatnosti da izgubim 7 bodova"
              name="group1"
              data-value="true"
              type="radio"
            />
          </div>
        </Form>
        {isRightAnswer}
        <button
          className={styles.startTutorial}
          onClick={() => {
            dispatch(setLeft(3));
            dispatch(setBlind(false));
            dispatch(setLog(false));
            dispatch(nextStage());
          }}
          disabled={!isRightAnswer}
        >
          Probna igra
        </button>
      </div>
    </div>
  );
}
