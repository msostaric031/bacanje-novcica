import React, { useState } from 'react';
import styles from './Landing.module.css';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import { useDispatch } from 'react-redux';
import { nextStage, setLog, setBlind, setLeft } from '../store/stageSlice';
import { setInfo } from '../store/playerInfoSlice';

export default function PlayerForm() {
  const dispatch = useDispatch();
  const [uIstrazivanju, setIstrazivanje] = useState(false);
  const handleSubmit = (e) => {
    e.preventDefault();
    e.stopPropagation();
    const form = Object.entries(e.target.elements)
    .filter(el => isNaN(el[0]) && el[0] !== 'button')
    .map(el => {
      let obj = {}
      obj[el[0]] = el[1].value
      return obj
    })
    dispatch(setInfo(form))
    dispatch(setLeft(55)); 
    dispatch(setBlind(false)); 
    dispatch(setLog(true));
    dispatch(nextStage()); 
  }
  return (
    <div className={styles.container}>
      <h1>Prije početka igre</h1>
      <h2>Molim vas odgovorite na pitanja ispod!</h2>
      <Form className="row mt-5" onSubmit={handleSubmit}>
        <div className="col">
          <Form.Group className="mb-3">
            <Form.Label>Jedinstvena šifra</Form.Label>
            <Form.Control type="text" placeholder="Šifra" required name="sifra" />
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Naziv istraživanja</Form.Label>
            <Form.Control type="text" placeholder="Naziv istraživanja" required={uIstrazivanju} disabled={uIstrazivanju} name="istrazivanje" />
            <Form.Check 
              type="checkbox"
              name="istrazivanjeCheckbox"
              label="Ne koristim igru u sklopu istraživanja"
              value={!uIstrazivanju}
              onClick={() => setIstrazivanje(!uIstrazivanju)}
            />
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Dob</Form.Label>
            <Form.Control type="number" min={1} max={100} placeholder="Dob" required name="dob" />
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Spol</Form.Label>
            <Form.Select required name="spol" defaultValue="">
              <option value="" disabled></option>
              <option value="M">Muško</option>
              <option value="W">Žensko</option>
            </Form.Select>
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Stupanj obrazovanja</Form.Label>
            <Form.Select required name="obrazovanje" defaultValue="">
              <option value="" disabled></option>
              <option value="1">Niža stručna sprema</option>
              <option value="2">Srednja stručna sprema</option>
              <option value="3">Viša stručna sprema</option>
              <option value="4">Visoka stručna sprema</option>
            </Form.Select>
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Radni status</Form.Label>
            <Form.Select required name="radni" defaultValue="">
              <option value="" disabled></option>
              <option value="1">Zaposlen/a</option>
              <option value="2">Nezaposlen/a</option>
              <option value="3">Učenik/ca</option>
              <option value="4">Student/ica</option>
              <option value="5">Umirovljenik/ca</option>
            </Form.Select>
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Socio ekonomski status</Form.Label>
            <Form.Select required name="socioeko" defaultValue="">
              <option value="" disabled></option>
              <option value="1">Znatno ispod prosjeka</option>
              <option value="2">Donekle ispod prosjeka</option>
              <option value="3">U prosjeku</option>
              <option value="4">Donekle iznad prosjeka</option>
              <option value="5">Znatno iznad prosjeka</option>
            </Form.Select>
          </Form.Group>
        </div>
        <div className="col">
          <Form.Group className="mb-3">
            <Form.Label>S kojim iznosom bi bili zadovoljni?</Form.Label>
            <Form.Control type="number" min={-3750} max={3750} placeholder="Priželjkivani rezultat" required name="zadovoljavajuc" />
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Koliko bodova mislite da će te ostvarit?</Form.Label>
            <Form.Control type="number" min={-3750} max={3750} placeholder="Očekivani rezultat" required name="ocekivani" />
          </Form.Group>
        </div>
        <Button variant="primary" type="submit" className="mt-5" name="button">
          Pokreni igru
        </Button>
      </Form>
    </div>
  )
}