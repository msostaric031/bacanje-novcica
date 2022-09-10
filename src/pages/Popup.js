import { useRef, useEffect } from 'react';
import * as ReactDOM from 'react-dom';

export default function Popup(props) {
  const containerEl = document.createElement('div');
  const externalWindow = useRef(null)
  useEffect(() => {
    // mount
    externalWindow.current = window.open('', '', 'width=600,height=400,left=200,top=200');
    externalWindow.current.document.body.appendChild(containerEl);
    externalWindow.current.document.title = '';
    return () => {
      // unmount
      externalWindow.current.close();
    }
  });
  
  return ReactDOM.createPortal(props.children, containerEl);
}