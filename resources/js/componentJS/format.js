export default formatter(() => {
  const formatter2f = async(number) => new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 2 }).format(number);
  return {
    formatter2f,
  }
})