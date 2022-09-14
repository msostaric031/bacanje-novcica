import React, { useState } from "react";
import styles from "./RateForm.module.css";
import { useDispatch, useSelector } from "react-redux";
import Button from "react-bootstrap/Button";
import { nextStage } from "../store/stageSlice";
import { selectLastPoints, selectHistory } from "../store/historySlice";
import {
  addRatings,
  selectRatings,
  selectPlayerInfo,
} from "../store/playerInfoSlice";
import Form from "react-bootstrap/Form";
import Popup from "./Popup";

export default function RateFormLast() {
  const dispatch = useDispatch();
  const [zadovoljstvo, setZadovoljstvo] = useState(null);
  const [opreznost, setOpreznost] = useState(null);
  const [popup, setPopup] = useState(false);
  const bodovi = useSelector(selectLastPoints);
  const ratings = useSelector(selectRatings);
  const history = useSelector(selectHistory);
  const playerInfo = useSelector(selectPlayerInfo);
  const handleZavrsi = (e) => {
    dispatch(
      addRatings({
        stage: "post-blind",
        zadovoljstvo: zadovoljstvo,
        opreznost: opreznost,
      })
    );
    e.preventDefault();
    e.stopPropagation();
    setPopup(true);
  };
  const handlePopupSubmit = (e) => {
    setPopup(false);
    if (e.target.elements["allowedToUseData"].checked) {
      console.log(history);
      console.log(ratings);
      console.log(playerInfo);
    }
    dispatch(nextStage());
  };
  return (
    <div>
      {popup && (
        <Popup>
          <h3>
            Prije nego li Vam damo rezultate koji se odnose na Vaš uradak na
            igrici, zamolili bi Vas da nam odgovorite jesu li Vaši podaci
            pogodni za istraživanje? Rezultati će Vam se prikazati bez obzira
            kako odgovorili, stoga molimo da budete iskreni, jer će nam to od
            velike pomoći.
          </h3>
          <Form onSubmit={handlePopupSubmit}>
            <div key={`inline-radio`} className="mb-5">
              <Form.Check
                label="Ne, nisam ispunjavao/la podatke razmišljajući o ponuđenim opcijama. Samo sam isprobavao/la igricu. "
                name="group1"
                type="radio"
                defaultChecked={true}
              />
              <Form.Check
                label="Da, dao/la sam podatke koji se mogu smatrati vjerodostojnima i mogu se koristiti za analizu rezultata u sklopu istraživanja."
                name="group1"
                type="radio"
                id="allowedToUseData"
              />
            </div>
            <Button variant="primary" type="submit" name="button">
              Odaberi
            </Button>
          </Form>
        </Popup>
      )}
      <div className={styles.container}>
        <h1 className={styles.title}>Ostvarili ste {bodovi} bodova</h1>
        <h5>Na skali od -5 do 5, koliko ste zadovoljni ostvarenim bodovima?</h5>
        <h5>
          Pritom, -5 znači - "Jako nezadovoljan/nezadovoljna", 0 - "Niti
          zadovoljan/na niti nezadovoljan/na"; +5 - "Izrazito zadovoljan/na"
        </h5>
        <div className={styles.ratingBar}>
          {[...Array(11).keys()].map((el) => {
            return (
              <Button
                className={zadovoljstvo === el ? "btn-secondary" : "btn-info"}
                key={el}
                onClick={() => setZadovoljstvo(el)}
              >
                {el - 5}
              </Button>
            );
          })}
        </div>
        <h5>Kako biste se kladili da možete ponovno igrat?</h5>
        <div className={styles.ratingBar}>
          {[...Array(6).keys()].map((el) => {
            return (
              <Button
                className={opreznost === el ? "btn-secondary" : "btn-info"}
                key={el}
                onClick={() => setOpreznost(el)}
              >
                {el + 1}
              </Button>
            );
          })}
        </div>
        <ol>
          <li>
            Preskočio/la bih sve oklade. Ne bih prihvatio nijednu ponuđenu
            okladu.
          </li>
          <li>Puno opreznije bih se kladio/la</li>
          <li>Malo opreznije bih se kladio/la</li>
          <li>Igrao/la bi jednako</li>
          <li>Malo više bih riskirao/la s okladama</li>
          <li>Puno više bih riskirao/la s okladama</li>
          <li>Kladio/la bih se na sve ponude</li>
        </ol>
        <Button
          variant="primary"
          className="mt-5"
          name="button"
          size="lg"
          disabled={zadovoljstvo === null || opreznost === null}
          onClick={handleZavrsi}
        >
          Završi
        </Button>
      </div>
    </div>
  );
}
