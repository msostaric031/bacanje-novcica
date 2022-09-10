import { configureStore } from '@reduxjs/toolkit';
import stageReducer from './stageSlice'
import historyReducer from './historySlice'
import playerInfoReducer from './playerInfoSlice'

export const store = configureStore({
  reducer: {
    stage: stageReducer,
    history: historyReducer,
    playerInfo: playerInfoReducer
  },
});
