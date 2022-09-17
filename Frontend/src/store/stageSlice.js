import { createSlice } from '@reduxjs/toolkit'

const initialState = { value: 0, spinsLeft: 0, log: false, blind: false }

const stageSlice = createSlice({
  name: 'stage',
  initialState,
  reducers: {
    decrementLeft(state){
      state.spinsLeft -= 1;
    },
    setLeft(state, action) {
      state.spinsLeft = action.payload
    },
    nextStage(state) {
      state.value += 1
    },
    setStage(state, action) {
      state.value = action.payload
    },
    setLog(state, action){
      state.log = action.payload
    },
    setBlind(state, action){
      state.blind = action.payload
    }
  },
})

export const selectStage = (state) => state.stage.value;
export const selectSpinsLeft = (state) => state.stage.spinsLeft;
export const selectLog = (state) => state.stage.log;
export const selectBlind = (state) => state.stage.blind;

export const { decrementLeft, nextStage, setStage, setLeft, setLog, setBlind } = stageSlice.actions
export default stageSlice.reducer