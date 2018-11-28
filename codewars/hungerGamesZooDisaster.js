

var whoEatsWho = function(zoo) {
  const eatMap = {
    antelope: ['grass'],
    "big-fish": ['little-fish'],
    bug: ['leaves'],
    bear: ['big-fish', 'bug', 'chicken', 'cow', 'leaves', 'sheep'],
    chicken: ['bug'],
    cow: ['grass'],
    fox: ['chicken', 'sheep'],
    giraffe: ['leaves'],
    lion: ['antelope', 'cow'],
    panda: ['leaves'],
    sheep: ['grass']
    }
  let result = []
  result[0] = zoo
  zoo = zoo.split(",")
  for (i=0; i<zoo.length; i++) {
    if (eatMap[zoo[i]]) {
      if (eatMap[zoo[i]].includes(zoo[i - 1])) {
      result.push(zoo[i] + " eats " + zoo[i - 1])
      zoo.splice(i - 1, 1)
      i -= 3
      }
      else if (eatMap[zoo[i]].includes(zoo[i + 1])) {
      result.push(zoo[i] + " eats " + zoo[i + 1])
      zoo.splice(i + 1, 1)
      i--
      }
    }
  }
  result.push(zoo.join(","))
  return result
}
