import './bootstrap';
import chalk from 'chalk';

const log = console.log;
console.log('ici tu code en JS !!!');

let a = 2;
let b = 3;

log(chalk.red.bold.bgYellow(` La somme de a et b est %s `), a + b);
