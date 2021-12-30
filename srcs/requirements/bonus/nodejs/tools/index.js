require('dotenv').config(); //initialize dotenv
const { Client, Intents } = require('discord.js');

const client = new Client({ intents: [Intents.FLAGS.GUILDS] });

client.on('ready', () => {
  console.log(`Logged in as ${client.user.tag}!`);
});

client.on('message', msg => {
    if (msg.content === '!ping') {
      msg.reply('Pong!');
    }
});

//make sure this line is the last line
client.login(process.env.CLIENT_TOKEN); //login bot using token