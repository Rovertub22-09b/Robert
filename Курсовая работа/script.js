class Toggle extends React.Component {
  constructor(props) {
    super(props);
    this.state = { isToggleOn: true };

    // This binding is necessary to make `this` work in the callback
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick() {
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn }));

  }

  render() {
    return /*#__PURE__*/(
      React.createElement("button", { onClick: this.handleClick },
      this.state.isToggleOn ? 'Нажмите, если я хороший мальчик' : 'Гав-гав!'));


  }}


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render( /*#__PURE__*/React.createElement(Toggle, null));