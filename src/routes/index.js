const { Router } = require("express");
const router = Router();

router.get("/", async (req, res) => {
    
    console.log('aquuiu');
    res.send('recibido');
  });

  module.exports = router;