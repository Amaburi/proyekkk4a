const text = [
  `Jelly sweet roll jelly beans biscuit pie macaroon chocolate donut. Carrot cake caramels pie sweet apple pie tiramisu carrot cake. Marzipan marshmallow croissant tootsie roll lollipop. Cupcake lemon drops bear claw gummies. Jelly bear claw gummi bears lollipop cotton candy gummi bears chocolate bar cake cookie. Cupcake muffin danish muffin cookie gummies. Jelly beans tiramisu pudding. Toffee soufflé chocolate cake pastry brownie. Oat cake halvah sweet roll cotton candy croissant lollipop. Macaroon tiramisu chocolate bar candy candy carrot cake jelly sweet. Gummies croissant macaroon dessert. Chocolate cake dragée pie.`,
  `Next level tbh everyday carry, blog copper mug forage kitsch roof party pickled hammock kale chips tofu. Etsy shoreditch 8-bit microdosing, XOXO viral butcher banh mi humblebrag listicle woke bicycle rights brunch before they sold out ramps. Twee shabby chic taiyaki flannel, enamel pin venmo vape four loko. Hexagon kale chips typewriter kitsch 8-bit organic plaid small batch keffiyeh ethical banh mi narwhal echo park cronut.`,
  `Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead.`,
  `Cat gets stuck in tree firefighters try to get cat down firefighters get stuck in tree cat eats firefighters' slippers kitty power ignore the squirrels, you'll never catch them anyway for what a cat-ass-trophy! or purr as loud as possible, be the most annoying cat that you can, and, knock everything off the table. Pretend you want to go out but then don't bite off human's toes, yet disappear for four days and return home with an expensive injury; bite the vet so catch eat throw up catch eat throw up bad birds. `,
  `This opera's as lousy as it is brilliant! Your lyrics lack subtlety. You can't just have your characters announce how they feel. That makes me feel angry! Anyhoo, your net-suits will allow you to experience Fry's worm infested bowels as if you were actually wriggling through them.
I just told you! You've killed me! Fry! Quit doing the right thing, you jerk! Michelle, I don't regret this, but I both rue and lament it. Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat.`,
  `Airedale hard cheese mozzarella. Pecorino melted cheese port-salut emmental babybel cheese and wine melted cheese manchego. Everyone loves blue castello everyone loves fromage cheese slices airedale cheddar cream cheese. Bavarian bergkase who moved my cheese halloumi port-salut gouda jarlsberg ricotta rubber cheese. Stinking bishop smelly cheese brie.`,
  `Six students who conduct Community Service Program (CSP) in a remote village, Nur, Widya, Ayu, Bima, Anton, and Wahyu, never think that the village they chose turns out to be extraordinary. Mr. Prabu, the village head, warns them not to cross the prohibited gate. The mysterious place might have something to do with the beautiful dancer who starts to disturb Nur and also Widya. One by one began to feel the strangeness of the village. Bima begins to change his attitude. Their CSP is a mess. It seems that the invisible inhabitants of the village do not like them. Nur finally discovers that one of them violates a fatal rule in the village. The terror of the mysterious dancer is even more sinister. They ask for help from Mbah Buyut, a local shaman. Too late. They are threatened not to be able to return safely from the village known as the Dancer's Village.`,
  `On Halloween, Gotham City mayor Don Mitchell Jr. is murdered by a serial killer calling himself the Riddler. Billionaire Bruce Wayne, who has operated for two years as the vigilante Batman, investigates alongside the Gotham City Police Department (GCPD). Lieutenant James Gordon discovers that the Riddler left a message for Batman, but commissioner Pete Savage berates him for allowing a vigilante to enter the crime scene and forces Batman to leave. The Riddler kills Savage and leaves another message for Batman.

  Batman and Gordon discover that the Riddler left a thumb drive in Mitchell's car containing images of Mitchell with a woman, Annika, at the Iceberg Lounge, a nightclub operated by mobster Carmine Falcone's lieutenant Penguin. Batman questions the Penguin, who pleads ignorance, but notices that Selina Kyle, Annika's roommate and girlfriend, works there as a waitress. After Annika disappears, Batman sends Selina back to the Iceberg Lounge to search for answers. Through Selina, Batman discovers that Savage was on Falcone's payroll, as is district attorney Gil Colson. Selina shuts off communication when Batman presses her about her relationship with Falcone.`,
  `The door of the multiverse, full of mystery and madness, opens. Now that Iron Man and Captain America have left after a fierce battle in Avengers: Endgame, former genius surgeon and the strongest magician of them all, Doctor Strange, is expected to play an active role as a central figure in the Avengers. However, using his magic to manipulate time and space at will with a forbidden spell that is considered the most dangerous has opened the door to a mysterious madness called “the Multiverse.” To restore a world where everything is changing.`,
];

const form = document.querySelector(".lorem-form");
const amount = document.getElementById("amount");
const result = document.querySelector(".lorem-text");

form.addEventListener("submit", function (e) {
  // A click on a form submit button – initiates its submission to the server.

  e.preventDefault();

  const value = parseInt(amount.value);
  const random = Math.floor(Math.random() * text.length);

  if (isNaN(value) || value < 0 || value > 9) {
    result.innerHTML = `<p class="result">${text[random]}</p>`;
  } else {
    let tempText = text.slice(0, value);
    tempText = tempText
      .map(function (item) {
        return `<p class="result">${item}</p>`;
      })
      .join("");
    result.innerHTML = tempText;
  }
});
