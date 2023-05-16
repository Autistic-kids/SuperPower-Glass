import 'package:flutter/foundation.dart';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:kids/provider.dart';
import 'package:kids/view/Level%201.dart';
import 'package:kids/view/level2.dart';
import 'package:kids/view/level3.dart';
import 'package:kids/view/level5.dart';
import 'package:provider/provider.dart';

class Videos extends StatefulWidget {
  const Videos({Key? key}) : super(key: key);

  @override
  State<Videos> createState() => _VideosState();
}

class _VideosState extends State<Videos> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: Builder(builder: (context) {
        return drawerLables(context, 1);
      }),
      appBar: AppBar(
        title: const Text(
          "Educational",
        ),
        centerTitle: true,
      ),
      backgroundColor: Colors.white,
      //body contains three buttons that navigate to the three levels
      body: Padding(
        padding: const EdgeInsets.all(8.0),
        child: Center(
          child: GridView(
            shrinkWrap: true,
            gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(
              crossAxisCount: 2,
              mainAxisSpacing: 20,
              crossAxisSpacing: 20,
            ),
            children: [
              // button to navigate to level 1
              InkWell(
                onTap: () {
                  Navigator.of(context).push(MaterialPageRoute<void>(
                    fullscreenDialog: true,
                    builder: (context) => const Level1Page(),
                  ));
                },
                child: Container(
                  decoration: BoxDecoration(
                    color: Colors.grey.shade300,
                    borderRadius: BorderRadius.circular(20),
                  ),
                  child: Center(
                    child: Column(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        const Text(
                          "Level 1",
                          style: TextStyle(
                            fontSize: 20,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                        Image.asset(
                          "images/colors.png",
                          scale: 2,
                        ),
                      ],
                    ),
                  ),
                ),
              ),
              //button to navigate to level 2
              InkWell(
                onTap: () {
                  Navigator.of(context).push(MaterialPageRoute<void>(
                    fullscreenDialog: true,
                    builder: (context) => const Level2Page(),
                  ));
                },
                child: Container(
                  decoration: BoxDecoration(
                    color: Colors.lightBlueAccent.shade100,
                    borderRadius: BorderRadius.circular(20),
                  ),
                  child: Center(
                    child: Column(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        const Text(
                          "Level 2",
                          style: TextStyle(
                            fontSize: 20,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                        Image.asset(
                          "images/numbers.png",
                          fit: BoxFit.contain,
                        ),
                      ],
                    ),
                  ),
                ),
              ),
              //button to navigate to level 3
              InkWell(
                onTap: () {
                  Navigator.of(context).push(MaterialPageRoute<void>(
                    fullscreenDialog: true,
                    builder: (context) => const Level3Page(),
                  ));
                },
                child: Container(
                  decoration: BoxDecoration(
                    color: Colors.green.shade300,
                    borderRadius: BorderRadius.circular(20),
                  ),
                  child: Center(
                    child: Column(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        const Text(
                          "Level 3",
                          style: TextStyle(
                            fontSize: 20,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                        Image.asset(
                          "images/story.png",
                          scale: 6,
                        ),
                      ],
                    ),
                  ),
                ),
              ),
              //button to navigate to level 4
              InkWell(
                onTap: () {
                  Navigator.of(context).push(MaterialPageRoute<void>(
                    fullscreenDialog: true,
                    builder: (context) => const Level5Page(),
                  ));
                },
                child: Container(
                  decoration: BoxDecoration(
                    color: Colors.purple.shade300,
                    borderRadius: BorderRadius.circular(20),
                  ),
                  child: Center(
                    child: Column(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        const Text(
                          "Level 4",
                          style: TextStyle(
                            fontSize: 20,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                        Image.asset(
                          "images/thinking.png",
                          scale: 6,
                        ),
                      ],
                    ),
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
  Widget drawerLables(BuildContext context, int index) {
    return Container(
      width: 300,
      height: MediaQuery.of(context).size.height,
      color: Colors.white,
      padding: const EdgeInsets.all(20),
      child: Column(
        children: [
          Image.asset("images/logo.jpeg"),
          const SizedBox(
            height: 50,
          ),
          ListTile(
            title: const Text("Sensors"),
            leading: const Icon(Icons.sensors),
            onTap: index == 0
                ? () {
              Scaffold.of(context).closeDrawer();
            }
                : () {
              activeIndex = 0;
              if (kDebugMode) {
                print(index);
              }
              Provider.of<HomePageProvider>(context,listen: false).notifyListeners();
              Scaffold.of(context).closeDrawer();
            },
            selected: index == 0 ? true : false,
          ),
          ListTile(
            title: const Text("Educational"),
            leading: const Icon(Icons.ondemand_video),
            onTap: index == 1
                ? () {
              Scaffold.of(context).closeDrawer();
            }
                : () {
              activeIndex = 1;
              if (kDebugMode) {
                print(index);
              }
              Scaffold.of(context).closeDrawer();
              Provider.of<HomePageProvider>(context,listen: false).notifyListeners();
            },
            selected: index == 1 ? true : false,
          ),
          ListTile(
            title: const Text("Profile"),
            leading: const Icon(Icons.person),
            onTap: index == 2
                ? () {
              Scaffold.of(context).closeDrawer();
            }
                : () {
              activeIndex = 2;
              if (kDebugMode) {
                print(index);
              }
              Provider.of<HomePageProvider>(context,listen: false).notifyListeners();
              Scaffold.of(context).closeDrawer();
            },
            selected: index == 2 ? true : false,
          ),
        ],
      ),
    );
  }
}
