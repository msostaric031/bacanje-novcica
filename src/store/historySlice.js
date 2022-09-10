import { createSlice } from '@reduxjs/toolkit'

const initialState = { spins: [], lastPoints: 0 }

const historySlice = createSlice({
  name: 'history',
  initialState,
  reducers: {
    addSpin(state, action) {
      state.spins = [...state.spins, action.payload]
    },
    setLastPoints(state, action) {
      state.lastPoints = action.payload
    }
  },
})

export const selectHistory = (state) => state.history.spins;
export const selectLastPoints = (state) => state.history.lastPoints;

export const { addSpin, setLastPoints } = historySlice.actions
export default historySlice.reducer