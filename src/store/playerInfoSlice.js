import { createSlice } from '@reduxjs/toolkit'

const initialState = { info: [], ratings: [] }

const playerInfoSlice = createSlice({
  name: 'playerInfo',
  initialState,
  reducers: {
    setInfo(state, action) {
      state.info = action.payload
    },
    addRatings(state, action) {
      state.ratings = [...state.ratings, action.payload]
    }
  },
})

export const selectPlayerInfo = (state) => state.playerInfo.info;
export const selectRatings = (state) => state.playerInfo.ratings;

export const { setInfo, addRatings } = playerInfoSlice.actions
export default playerInfoSlice.reducer