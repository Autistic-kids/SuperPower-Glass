import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:youtube_player_flutter/youtube_player_flutter.dart';

class Level1Page extends StatefulWidget {
  const Level1Page({Key? key}) : super(key: key);

  @override
  State<Level1Page> createState() => _Level1PageState();
}

class _Level1PageState extends State<Level1Page> {
  final YoutubePlayerController _animalController = YoutubePlayerController(
    initialVideoId: 'g6ilEySIXZE',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _birdController = YoutubePlayerController(
    initialVideoId: 'jmZOkBqME_U',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );

  final YoutubePlayerController _colorController = YoutubePlayerController(
    initialVideoId: 'u-U4b9iUrgU',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _fruitsController = YoutubePlayerController(
    initialVideoId: 'uzjrIKcEwo8',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );

  final YoutubePlayerController _vegetablesController = YoutubePlayerController(
    initialVideoId: '6G9mnU8S55k',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _humanBodyController = YoutubePlayerController(
    initialVideoId: 'DFI44IQS9yM',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _familyController = YoutubePlayerController(
    initialVideoId: 'jIUnhqJdwg0',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _homeController = YoutubePlayerController(
    initialVideoId: 'qesTNKhg-1A',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _transportController = YoutubePlayerController(
    initialVideoId: 'EMYibS8-mX8',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
      length: 9,
      child: Scaffold(
        backgroundColor: const Color(0xffeaeee0),
        appBar: AppBar(
          title: const Text(
            "Level 1",
          ),
          centerTitle: true,
          automaticallyImplyLeading: false,
          bottom: const TabBar(
            isScrollable: true,
            tabs: [
              Tab(
                text: "Animals",
              ),
              Tab(
                text: "birds",
              ),
              Tab(
                text: "Colors",
              ),
              Tab(
                text: "Fruits",
              ),
              Tab(
                text: "Vegetables",
              ),
              Tab(
                text: "Human Body",
              ),
              Tab(
                text: "Family",
              ),
              Tab(
                text: "Home",
              ),
              Tab(
                text: "Transport",
              ),
            ],
          ),
        ),
        body: TabBarView(
          children: [
            Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                crossAxisAlignment: CrossAxisAlignment.end,
                children: [
                  const SizedBox(
                    height: 50,),
                  YoutubePlayer(
                    controller: _animalController,
                    showVideoProgressIndicator: true,
                    onReady: () {
                      _animalController.play();
                    },
                  ),
                  Padding(
                    padding: const EdgeInsets.all(12),
                    child: FloatingActionButton(
                      onPressed: () {
                        FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                          "VideoID": "1",
                        });
                        Future.delayed(const Duration(seconds: 7), () {
                          FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                            "VideoID": "3",
                          });                        });
                      },


                      child: const Icon(Icons.send_to_mobile),
                    ),
                  ),
                ],
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _birdController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _birdController.play();
                },
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _colorController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _colorController.play();
                },
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _fruitsController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _fruitsController.play();
                },
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _vegetablesController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _vegetablesController.play();
                },
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _humanBodyController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _humanBodyController.play();
                },
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _familyController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _familyController.play();
                },
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _homeController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _homeController.play();
                },
              ),
            ),
            Center(
              child: YoutubePlayer(
                controller: _transportController,
                showVideoProgressIndicator: true,
                onReady: () {
                  _transportController.play();
                },
              ),
            ),
          ],
        ),
      ),
    );
  }
}
