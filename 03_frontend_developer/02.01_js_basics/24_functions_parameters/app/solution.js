const truncate = (text, length) => {
    // BEGIN (write your solution here)
    return text.slice(0, length) + '...';
    // END
};

console.log(truncate('hexlet', 2)); // "he..."

// const text = 'it works!';
// truncate(text, 4); // 'it w...'

export default truncate;